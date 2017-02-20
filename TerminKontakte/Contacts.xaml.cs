using Microsoft.Win32;
using System;
using System.Collections.Generic;
using System.Data.OleDb;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Shapes;

namespace TerminKontakte
{
    /// <summary>
    /// Interaktionslogik für Kontakte.xaml
    /// </summary>
    public partial class Contacts : Window
    {
        public Contacts()
        {
            InitializeComponent();
        }

        private void Window_Loaded(object sender, RoutedEventArgs e)
        {
            try
            {
               GetFromDatabase();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.Message);
            }

        }


        private void saveButton_Click(object sender, RoutedEventArgs e)
        {
            try
            {
                var itemSelected = contactListBox.SelectedItems.Count > 0;
                var contact = createNewContact(itemSelected);

                if (checkIfOneValueIsEmpty(contact))
                {
                    MessageBox.Show("Bitte füllen Sie alle Felder aus.");
                    return;
                }

                if(itemSelected) UpdateInDatabase(contact);
                else InsertIntoDatabase(contact);

                contactListBox.Items.Add(contact.ToString());
                MessageBox.Show("Kontakt gespeichert.");
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.Message);
            }
        }

        private Contact createNewContact(bool itemSelected)
        {
            var id = itemSelected ? ((Contact)contactListBox.SelectedItem).Id : "";
            var picture = pictureTextBox.Text == string.Empty && itemSelected
                    ? ((Contact)contactListBox.SelectedItem).Picture
                    : pictureTextBox.Text != string.Empty
                        ? Convert.ToBase64String(File.ReadAllBytes(pictureTextBox.Text))
                        : string.Empty;

            return new Contact
            {
                Id = id,
                Surname = surnameTextBox.Text ?? "",
                Name = nameTextBox.Text ?? "",
                Phone = phoneTextBox.Text ?? "",
                Email = mailTextBox.Text ?? "",
                Street = streetTextBox.Text ?? "",
                Zip = zipTextBox.Text ?? "",
                City = cityTextBox.Text ?? "",
                Picture = picture
            };
        }



        private void pictureButton_Click(object sender, RoutedEventArgs e)
        {
            var openFileDialog = new OpenFileDialog();
            if (openFileDialog.ShowDialog() == true)
            {
                pictureImage.Source = new BitmapImage(new Uri(openFileDialog.FileName));
                pictureTextBox.Text = openFileDialog.FileName;
            }
        }

        #region private functions
        private bool checkIfOneValueIsEmpty(Contact contact)
        {

            if (string.IsNullOrEmpty(contact.Surname) || string.IsNullOrEmpty(contact.Name) || string.IsNullOrEmpty(contact.Phone)
                || string.IsNullOrEmpty(contact.Email) || string.IsNullOrEmpty(contact.Street) || string.IsNullOrEmpty(contact.Zip)
                || string.IsNullOrEmpty(contact.City))
                return true;

            return false;
        }



        private void UpdateInDatabase(Contact contact)
        {
            using (OleDbConnection conn = new OleDbConnection(Properties.Resources.connectionString))
            {
                conn.Open();
                using (OleDbCommand cmd = conn.CreateCommand())
                {
                    cmd.CommandText =
                        @"UPDATE Contacts 
                        SET [Surname] = @Surname, 
                        [Prename] = @Name, 
                        [Phone] = @Phone,
                        [Email] = @Email,
                        [Street] = @Street,
                        [Zip] = @Zip,
                        [City] = @City,
                        [Picture] = @Picture
                        WHERE Id = @id";

                    cmd.Parameters.Add(new OleDbParameter("@id", contact.Id));
                    cmd.Parameters.Add(new OleDbParameter("@title", contact.Surname));
                    cmd.Parameters.Add(new OleDbParameter("@Name", contact.Name));
                    cmd.Parameters.Add(new OleDbParameter("@Phone", contact.Phone));
                    cmd.Parameters.Add(new OleDbParameter("@Email", contact.Email));
                    cmd.Parameters.Add(new OleDbParameter("@Street", contact.Street));
                    cmd.Parameters.Add(new OleDbParameter("@Zip", contact.Zip));
                    cmd.Parameters.Add(new OleDbParameter("@City", contact.City));
                    cmd.Parameters.Add(new OleDbParameter("@Picture", contact.Picture));

                    cmd.ExecuteNonQuery();
                }
                conn.Dispose();
                conn.Close();
            }
        }

        private void InsertIntoDatabase(Contact contact)
        {
            using (OleDbConnection conn = new OleDbConnection(Properties.Resources.connectionString))
            {
                conn.Open();
                using (OleDbCommand cmd = conn.CreateCommand())
                {
                    cmd.CommandText =
                       "INSERT INTO Contacts " +
                       "([Surname], [Prename], [Phone], [Email], [Street], [Zip], [City], [Picture]) " +
                       "VALUES(@Surname, @Name, @Phone, @Email, @Street, @Zip, @City, @Picture)";

                    cmd.Parameters.Add(new OleDbParameter("@title", contact.Surname));
                    cmd.Parameters.Add(new OleDbParameter("@Name", contact.Name));
                    cmd.Parameters.Add(new OleDbParameter("@Phone", contact.Phone));
                    cmd.Parameters.Add(new OleDbParameter("@Email", contact.Email));
                    cmd.Parameters.Add(new OleDbParameter("@Street", contact.Street));
                    cmd.Parameters.Add(new OleDbParameter("@Zip", contact.Zip));
                    cmd.Parameters.Add(new OleDbParameter("@City", contact.City));
                    cmd.Parameters.Add(new OleDbParameter("@Picture", contact.Picture));

                    cmd.ExecuteNonQuery();
                }
                conn.Dispose();
                conn.Close();
            }
        }

        private void GetFromDatabase()
        {
            var listOfContacts = new List<Contact>();
            using (OleDbConnection conn = new OleDbConnection(Properties.Resources.connectionString))
            {
                conn.Open();
                using (OleDbCommand cmd = conn.CreateCommand())
                {
                    cmd.CommandText = "Select * FROM Contacts";
                    OleDbDataReader reader = cmd.ExecuteReader();

                    while (reader.Read())
                    {
                        var contact = new Contact
                        {
                            Id = reader.GetValue(0).ToString(),
                            Surname = reader.GetValue(1).ToString(),
                            Name = reader.GetValue(2).ToString(),
                            Phone = reader.GetValue(3).ToString(),
                            Email = reader.GetValue(4).ToString(),
                            Street = reader.GetValue(5).ToString(),
                            Zip = reader.GetValue(6).ToString(),
                            City = reader.GetValue(7).ToString(),
                            Picture = reader.GetValue(8).ToString()
                        };
                        contactListBox.Items.Add(contact);
                    }
                    reader.Close();

                }
                conn.Dispose();
                conn.Close();
            }
        }
        #endregion

        private void contactListBox_SelectionChanged(object sender, SelectionChangedEventArgs e)
        {
            //fix this!
            var contact = ((ListBox)sender).SelectedItem as Contact;
            SetFieldsFromItem(contact);
        }

        private void SetFieldsFromItem(Contact contact)
        {
            var imageAsByteArray = Convert.FromBase64String(contact.Picture);
            BitmapSource bitmapImageSource = null;

            if(imageAsByteArray.Length > 0)
                bitmapImageSource = (BitmapSource)new ImageSourceConverter().ConvertFrom(imageAsByteArray);

            surnameTextBox.Text = contact.Surname;
            nameTextBox.Text = contact.Name;
            phoneTextBox.Text = contact.Phone;
            mailTextBox.Text = contact.Email;
            streetTextBox.Text = contact.Street;
            zipTextBox.Text = contact.Zip;
            cityTextBox.Text = contact.City;
            pictureImage.Source = bitmapImageSource;
        }
    }
}

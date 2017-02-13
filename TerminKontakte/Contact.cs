using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace TerminKontakte
{
    class Contact
    {
        public string Id { get; set; }
        public string Surname { get; set; }
        public string Name { get; set; }
        public string Phone { get; set; }
        public string Email { get; set; }
        public string Street { get; set; }
        public string Zip { get; set; }
        public string City { get; set; }
        public string Picture { get; set; }

        public override string ToString()
        {
            return string.Format
            (
                "Name: {0}\t Vornamen: {1}\t Tel.: {2}\t E-Mail: {3}\t Straße: {4}\t PLZ: {5}\t Ort: {6}",
                Surname,
                Name,
                Phone,
                Email,
                Street,
                Zip,
                City
            );
        }
    }
}

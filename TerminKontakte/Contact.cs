using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace TerminKontakte
{
    class Contact
    {
        public string Surname { get; set; }
        public string Name { get; set; }
        public string Phone { get; set; }
        public string Email { get; set; }
        public string Street { get; set; }
        public string Zip { get; set; }
        public string City { get; set; }
        public byte[] Picture { get; set; }

        public override string ToString()
        {
            return string.Format
            (
                "{0}{1}{2}{3}{4}{5}{6}",
                Surname,
                Name,
                Phone,
                Email,
                Street,
                Zip,
                City,
                Picture
            );
        }
    }
}

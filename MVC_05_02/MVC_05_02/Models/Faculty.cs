using System;
using System.Collections.Generic;

#nullable disable

namespace MVC_05_02.Models
{
    public partial class Faculty
    {
        public Faculty()
        {
            Departments = new HashSet<Department>();
            Subjects = new HashSet<Subject>();
        }

        public int Id { get; set; }
        public string FirstName { get; set; }
        public string LastName { get; set; }
        public int DepartmentId { get; set; }
        public string Phone { get; set; }

        public virtual Department Department { get; set; }
        public virtual ICollection<Department> Departments { get; set; }
        public virtual ICollection<Subject> Subjects { get; set; }
    }
}

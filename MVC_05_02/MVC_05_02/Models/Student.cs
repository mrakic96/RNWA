using System;
using System.Collections.Generic;

#nullable disable

namespace MVC_05_02.Models
{
    public partial class Student
    {
        public Student()
        {
            Marks = new HashSet<Mark>();
        }

        public int RollNum { get; set; }
        public string FirstName { get; set; }
        public string LastName { get; set; }
        public int? DepartmentId { get; set; }
        public string Phone { get; set; }
        public DateTime AdmissionDate { get; set; }
        public int CetMarks { get; set; }

        public virtual Department Department { get; set; }
        public virtual ICollection<Mark> Marks { get; set; }
    }
}

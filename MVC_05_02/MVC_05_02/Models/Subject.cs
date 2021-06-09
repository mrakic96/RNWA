using System;
using System.Collections.Generic;

#nullable disable

namespace MVC_05_02.Models
{
    public partial class Subject
    {
        public Subject()
        {
            Marks = new HashSet<Mark>();
        }

        public int Id { get; set; }
        public int DepartmentId { get; set; }
        public int StartDate { get; set; }
        public int EndDate { get; set; }
        public string Name { get; set; }
        public int FacultyId { get; set; }

        public virtual Department Department { get; set; }
        public virtual Faculty Faculty { get; set; }
        public virtual ICollection<Mark> Marks { get; set; }
    }
}

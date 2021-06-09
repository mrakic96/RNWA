using System;
using System.Collections.Generic;

#nullable disable

namespace MVC_05_02.Models
{
    public partial class Mark
    {
        public int Id { get; set; }
        public int StudentRollNum { get; set; }
        public int SubjectId { get; set; }
        public int Marks { get; set; }

        public virtual Student StudentRollNumNavigation { get; set; }
        public virtual Subject Subject { get; set; }
    }
}

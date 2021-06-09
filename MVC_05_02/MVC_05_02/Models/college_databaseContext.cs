using System;
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Metadata;

#nullable disable

namespace MVC_05_02.Models
{
    public partial class college_databaseContext : DbContext
    {
        public college_databaseContext()
        {
        }

        public college_databaseContext(DbContextOptions<college_databaseContext> options)
            : base(options)
        {
        }

        public virtual DbSet<Department> Departments { get; set; }
        public virtual DbSet<Faculty> Faculties { get; set; }
        public virtual DbSet<Mark> Marks { get; set; }
        public virtual DbSet<Student> Students { get; set; }
        public virtual DbSet<Subject> Subjects { get; set; }

        protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
        {
            if (!optionsBuilder.IsConfigured)
            {
                optionsBuilder.UseMySql("server=localhost;port=3306;user=root;database=college_database", Microsoft.EntityFrameworkCore.ServerVersion.Parse("10.4.18-mariadb"));
            }
        }

        protected override void OnModelCreating(ModelBuilder modelBuilder)
        {
            modelBuilder.HasCharSet("latin1")
                .UseCollation("latin1_swedish_ci");

            modelBuilder.Entity<Department>(entity =>
            {
                entity.ToTable("departments");

                entity.HasIndex(e => e.HodId, "department_hod_id");

                entity.Property(e => e.Id)
                    .HasColumnType("int(11)")
                    .HasColumnName("id");

                entity.Property(e => e.HodId)
                    .HasColumnType("int(11)")
                    .HasColumnName("hod_id");

                entity.Property(e => e.Name)
                    .IsRequired()
                    .HasMaxLength(30)
                    .HasColumnName("name");

                entity.HasOne(d => d.Hod)
                    .WithMany(p => p.Departments)
                    .HasForeignKey(d => d.HodId)
                    .HasConstraintName("department_hod_id");
            });

            modelBuilder.Entity<Faculty>(entity =>
            {
                entity.ToTable("faculty");

                entity.HasIndex(e => e.DepartmentId, "faculty_department_id");

                entity.Property(e => e.Id)
                    .HasColumnType("int(11)")
                    .HasColumnName("id");

                entity.Property(e => e.DepartmentId)
                    .HasColumnType("int(11)")
                    .HasColumnName("department_id");

                entity.Property(e => e.FirstName)
                    .IsRequired()
                    .HasMaxLength(25)
                    .HasColumnName("first_name");

                entity.Property(e => e.LastName)
                    .IsRequired()
                    .HasMaxLength(25)
                    .HasColumnName("last_name");

                entity.Property(e => e.Phone)
                    .HasMaxLength(10)
                    .HasColumnName("phone");

                entity.HasOne(d => d.Department)
                    .WithMany(p => p.Faculties)
                    .HasForeignKey(d => d.DepartmentId)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("faculty_department_id");
            });

            modelBuilder.Entity<Mark>(entity =>
            {
                entity.ToTable("marks");

                entity.HasIndex(e => e.StudentRollNum, "marks_student_roll_num");

                entity.HasIndex(e => e.SubjectId, "marks_subject_id");

                entity.Property(e => e.Id)
                    .HasColumnType("int(11)")
                    .HasColumnName("id");

                entity.Property(e => e.Marks)
                    .HasColumnType("int(11)")
                    .HasColumnName("marks");

                entity.Property(e => e.StudentRollNum)
                    .HasColumnType("int(11)")
                    .HasColumnName("student_roll_num")
                    .HasDefaultValueSql("'1'");

                entity.Property(e => e.SubjectId)
                    .HasColumnType("int(11)")
                    .HasColumnName("subject_id")
                    .HasDefaultValueSql("'1'");

                entity.HasOne(d => d.StudentRollNumNavigation)
                    .WithMany(p => p.Marks)
                    .HasForeignKey(d => d.StudentRollNum)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("marks_student_roll_num");

                entity.HasOne(d => d.Subject)
                    .WithMany(p => p.Marks)
                    .HasForeignKey(d => d.SubjectId)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("marks_subject_id");
            });

            modelBuilder.Entity<Student>(entity =>
            {
                entity.HasKey(e => e.RollNum)
                    .HasName("PRIMARY");

                entity.ToTable("students");

                entity.HasIndex(e => e.DepartmentId, "student_department_id");

                entity.Property(e => e.RollNum)
                    .HasColumnType("int(11)")
                    .HasColumnName("roll_num");

                entity.Property(e => e.AdmissionDate)
                    .HasColumnType("date")
                    .HasColumnName("admission_date");

                entity.Property(e => e.CetMarks)
                    .HasColumnType("int(11)")
                    .HasColumnName("cet_marks");

                entity.Property(e => e.DepartmentId)
                    .HasColumnType("int(11)")
                    .HasColumnName("department_id");

                entity.Property(e => e.FirstName)
                    .IsRequired()
                    .HasMaxLength(25)
                    .HasColumnName("first_name");

                entity.Property(e => e.LastName)
                    .IsRequired()
                    .HasMaxLength(25)
                    .HasColumnName("last_name");

                entity.Property(e => e.Phone)
                    .HasMaxLength(10)
                    .HasColumnName("phone");

                entity.HasOne(d => d.Department)
                    .WithMany(p => p.Students)
                    .HasForeignKey(d => d.DepartmentId)
                    .HasConstraintName("student_department_id");
            });

            modelBuilder.Entity<Subject>(entity =>
            {
                entity.ToTable("subjects");

                entity.HasIndex(e => e.DepartmentId, "subject_department_id");

                entity.HasIndex(e => e.FacultyId, "subject_faculty_id");

                entity.Property(e => e.Id)
                    .HasColumnType("int(11)")
                    .HasColumnName("id");

                entity.Property(e => e.DepartmentId)
                    .HasColumnType("int(11)")
                    .HasColumnName("department_id");

                entity.Property(e => e.EndDate)
                    .HasColumnType("int(11)")
                    .HasColumnName("end_date");

                entity.Property(e => e.FacultyId)
                    .HasColumnType("int(11)")
                    .HasColumnName("faculty_id")
                    .HasDefaultValueSql("'1'");

                entity.Property(e => e.Name)
                    .IsRequired()
                    .HasMaxLength(50)
                    .HasColumnName("name");

                entity.Property(e => e.StartDate)
                    .HasColumnType("int(11)")
                    .HasColumnName("start_date");

                entity.HasOne(d => d.Department)
                    .WithMany(p => p.Subjects)
                    .HasForeignKey(d => d.DepartmentId)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("subject_department_id");

                entity.HasOne(d => d.Faculty)
                    .WithMany(p => p.Subjects)
                    .HasForeignKey(d => d.FacultyId)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("subject_faculty_id");
            });

            OnModelCreatingPartial(modelBuilder);
        }

        partial void OnModelCreatingPartial(ModelBuilder modelBuilder);
    }
}

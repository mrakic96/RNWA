using System;
using System.Data;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace DZ3_SOAP_WSDL_02
{
    public partial class WebFormStudent : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void StudentBtn_Click(object sender, EventArgs e)
        {
            ServiceReference2.WebService2Soap klient = new ServiceReference2.WebService2SoapClient("WebService2Soap");
            string broj = StudentNumber.Text;
            DataTable rezultat = klient.getStudentByNumber(broj);
            StudentInfo.Text = rezultat.Rows[0]["first_name"].ToString();
            StudentInfo2.Text = rezultat.Rows[0]["last_name"].ToString();
            StudentInfo3.Text ="Id odjela: " + rezultat.Rows[0]["department_id"].ToString();
            StudentInfo4.Text ="Telefon: " + rezultat.Rows[0]["phone"].ToString();
            StudentInfo5.Text = "Datum upisa: " + rezultat.Rows[0]["admission_date"].ToString();
            StudentInfo6.Text = "Cet: " + rezultat.Rows[0]["cet_marks"].ToString();
        }
    }
}
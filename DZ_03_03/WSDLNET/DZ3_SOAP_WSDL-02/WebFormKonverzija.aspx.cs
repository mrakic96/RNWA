using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace DZ3_SOAP_WSDL_02
{
    public partial class WebFormKonverzija : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void BAMEUR_Click(object sender, EventArgs e)
        {
            ServiceReference1.WebService1Soap klient = new ServiceReference1.WebService1SoapClient("WebService1Soap");
            float broj = float.Parse(InputField1.Text);
            float response = klient.konverzijaEURToBAM(broj);
            KonverzijaRez.Text = broj +" BAM je "+ response + " EUR";
        }

        protected void EURBAM_Click(object sender, EventArgs e)
        {
            ServiceReference1.WebService1Soap klient = new ServiceReference1.WebService1SoapClient("WebService1Soap");
            float broj = float.Parse(InputField1.Text);
            float response = klient.konverzijaBAMToEUR(broj);
            KonverzijaRez.Text = broj + " EUR je " + response + " BAM ";
        }
    }
}
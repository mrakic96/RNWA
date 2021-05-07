<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="WebFormKonverzija.aspx.cs" Inherits="DZ3_SOAP_WSDL_02.WebFormKonverzija" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
        <div>
            Konverzija BAM u EUR ili EUR u BAM</div>
        <p>
            <asp:TextBox ID="InputField1" runat="server"></asp:TextBox>
            <asp:Button ID="BAMEUR" runat="server" OnClick="BAMEUR_Click" Text="BAM u EUR" Width="114px" />
            <asp:Button ID="EURBAM" runat="server" OnClick="EURBAM_Click" Text="EUR u BAM" Width="114px" />
            <asp:Label ID="KonverzijaRez" runat="server"></asp:Label>
        </p>
    </form>
</body>
</html>

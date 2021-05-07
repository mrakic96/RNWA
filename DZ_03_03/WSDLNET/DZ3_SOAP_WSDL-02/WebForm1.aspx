<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="WebForm1.aspx.cs" Inherits="DZ3_SOAP_WSDL_02.WebForm1" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
        <div>
            Primjer</div>
        <p>
            <asp:TextBox ID="InputBroj" runat="server"></asp:TextBox>
            <asp:Button ID="BtnPoziv" runat="server" OnClick="BtnPoziv_Click" Text="Poziv web servisa" Width="133px" />
            <asp:Label ID="LblRezultat" runat="server"></asp:Label>
        </p>
    </form>
</body>
</html>

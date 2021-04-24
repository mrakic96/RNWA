<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="WebFormStudent.aspx.cs" Inherits="DZ3_SOAP_WSDL_02.WebFormStudent" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
        <div>
            Upišite Id studenta</div>
        <p>
            <asp:TextBox ID="StudentNumber" runat="server"></asp:TextBox>
            <asp:Button ID="StudentBtn" runat="server" OnClick="StudentBtn_Click" Text="Nadi podatke" />
        </p>
        <p>
            <asp:Label ID="StudentInfo" runat="server"></asp:Label>
            <asp:Label ID="StudentInfo2" runat="server"></asp:Label>
        </p>
        <asp:Label ID="StudentInfo3" runat="server"></asp:Label>
        <p>
            <asp:Label ID="StudentInfo4" runat="server"></asp:Label>
        </p>
        <asp:Label ID="StudentInfo5" runat="server"></asp:Label>
        <p>
            <asp:Label ID="StudentInfo6" runat="server"></asp:Label>
        </p>
    </form>
</body>
</html>

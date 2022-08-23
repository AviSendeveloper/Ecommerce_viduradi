<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Dear {{ $name }}</td>
        </tr>
        <tr>
            <td>Please click on the below link to activated your account</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td><a href="{{url('confirm/'.$code)}}">Click here to activated your account</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Thanks & Regards,</td>
        </tr>
        <tr>
            <td>Viduradi</td>
        </tr>

    </table>
</body>
</html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>input form demo</title>
    <link rel="stylesheet" type="text/css" href="../../themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="../../themes/icon.css">
    <link rel="stylesheet" type="text/css" href="../demo.css">
    <script src="../../jquery.min.js"></script>
    <script src="../../jquery.easyui.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Form Input Page For Examination Assesment</h1>
        <div id="w" class="easyui-window" title="Form Input" data-options="iconCls:'icon-save'" style="width:700px;height:350px;padding:10px;">
            <table align="center">
                <form action="" method="get">
                    <tr>
                        <td><input class="easyui-textbox" id="no_peserta" label="No. Peserta :" labelPosition="top" data-option="prompt: Masukan No. Peserta" style="width:100%;"></td>
                    </tr>
                    <tr>
                        <td><input class="easyui-textbox" id="nama_peserta" label="Nama Peserta :" labelPosition="top" data-option="prompt: Masukan Nama" style="width:100%;"></td>
                    </tr>
                    <tr>
                        <td><input class="easyui-textbox" id="tpl_peserta" label="Tempat Lahir Peserta :" labelPosition="top" data-option="prompt: Masukan Tempat Lahir" style="width:100%;"></td>
                    </tr>
                    <tr>
                        <td><input class="easyui-datebox" id="tgl_peserta" label="Tanggal Lahir Peserta :" labelPosition="top" data-option="prompt: Masukan Tanggal Lahir" style="width:100%;"></td>
                    </tr>
                    <tr>
                        <td><input class="easyui-datebox" id="asal_sekolah" label="Asal Sekolah :" labelPosition="top" data-option="prompt: Masukan Asal Sekolah" style="width:100%;"></td>
                    </tr>
                    <tr>
                        <td>
                            <select class="easyui-combobox" name="program-studi" id="program_studi" label="Program Studi :" labelPosition="top" style="width:100%;">
                                <option value="agama">Keagamaan Islam</option>
                                <option value="sastra" selected>Sastra</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <a href="#" class="easyui-linkbutton" id="save" data-options="iconCls:'icon-save'">Register</a>
                        <a href="#" class="easyui-linkbutton" id="cancel" data-options="iconCls:'icon-cancel'">Cancel</a>
                    </tr>
                </form>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

<script>
    // JQuery code For The Buttons And More
    // $(function) maksudnya adlah js yang pertama kali dipanggil
    // $(function() {
    //     $('#save').bind('click', function() {
    //         $('#nama_peserta').textbox('setValue', $('#no_peserta').textbox('getValue'));
    //     });   
    //      $('#cancel').bind('click', function() {
    //         alert('easyui');
    //     });
    // });


</script>
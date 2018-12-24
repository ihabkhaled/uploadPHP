$(document).ready(function (e) {
    $("#uploadFile").on('submit',(function(e) {

        var img = document.createElement("IMG");
        img.src = "img/"+"Loading_icon.gif";

        e.preventDefault();
        $.ajax({
            url: "upload.php",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend : function()
            {
                document.getElementById('loading').appendChild(img);
            },
            success: function(data)
            {
                if(data.includes("The file uploaded successfully :") === true)
                {
                document.getElementById('loading').removeChild(img);
                data = data.substr(data.indexOf(':')+1, data.length-1);
                document.getElementById('msg').innerHTML = "File : " + data + " Uploaded Successfully.";
                $("#msg").append('<br><a href="uploads/'+data+'">File</a>');
                $("#msg").append('<br><iframe src="uploads/'+data+'">');
                $("#msg").append('<br>Done');
                }
                else
                {
                    document.getElementById('loading').removeChild(img);
                    document.getElementById('msg').innerHTML = data;
                }
            }
                
        });
    }));
});

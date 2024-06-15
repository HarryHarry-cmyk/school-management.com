<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="form">

    
                <label class="label_text1">text</label>
                <input type="text" id="text">
            </div>
            <div class="adm_int">
                <label class="label_text1">number</label>
                <input type="number" id="fontsize">
            </div>

            <button id="button">Submit</button>

</form>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>

<script>

    var form = document.getElementById('form')

    form.addEventListener('submit',function(event){
        event.preventDefault()

        var text = document.getElementById('text').value
        var fontsize = document.getElementById('fontsize').value

        var doc = new jsPDF()

        doc.setFontSize(fontsize)

        doc.text(text,20,20)

        doc.save("output.pdf")

    })
</script>
</html>
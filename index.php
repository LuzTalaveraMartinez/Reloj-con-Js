<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="(max-width: 1920px)" href="css/estilos.css">
    <title>Reloj</title>
</head>
<body>

<div class="cont-reloj">
    <div class="reloj" id="reloj"></div>
    <div class="datos">
        <span class="fec-Datos" id="fec-Datos"></span>
    </div>
</div>

<script>
    let mostrarHora=()=>{
        let reloj =document.getElementById('reloj')
        let fechadato=document.getElementById('fec-Datos')
        let dias=['lunes','martes','miercoles','jueves','viernes','sabado','domingo']
        let meses=['enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre']

        let fechaHora=new Date()
        let hora=fechaHora.getHours()
        let minutos=fechaHora.getMinutes()
        let segundos=fechaHora.getSeconds()
        let dia=fechaHora.getDate()
        let mes=fechaHora.getMonth()
        let año=fechaHora.getFullYear()
        let m=meses[mes]
        let hr=(hora>12) ? hora-12 : hora
        let am=(hora>12) ? 'PM': 'AM'
        if(hr<10){hr='0'+hr}
        if(minutos<10){minutos='0'+minutos}
        if(segundos<10){segundos='0'+segundos}
        

        reloj.textContent=`${hr}:${minutos}:${segundos} ${am}`
        fechadato.textContent=`${dia} ${m} del ${año}`
    }

    setInterval(mostrarHora, 1000)

</script>



</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <CENTER><h1>MOSTRAR DATOS <span class="badge badge-secondary"></span></h1></CENTER>
  <br>
 
 

<form action= "{{url('\ingresar')}}" method="get" accept-charset="utf-8">
  <div>
    <button type="submit" name="otrodato" class="btn btn-primary">OTRO DATO</button>
  </div>
</form>

	 <br>
  <table  border="2" class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>
      <th scope="col">CEDULA</th>
      <th scope="col">PROMEDIO</th>
      <th scope="col">DESCRIPCION</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$ENTRADA[0]}}</td>
      <td>{{$ENTRADA[1]}}</td>
      <td>{{$ENTRADA[2]}}</td>
      <td>{{$ENTRADA[3]}}</td>

      @if($ENTRADA[3]>=9 and $ENTRADA[3]<=10)
      <td style="background-color:#34AB0A"> EXCELENTE </td>
      @endif
      @if ($ENTRADA[3] >=7 and $ENTRADA[3] < 9)
      <td style="background-color:#410CAD"> MUY BUENO </td>
      @endif
      @if ($ENTRADA[3] >= 5 and $ENTRADA[3] < 7)
      <td style="background-color:#EFF712"> BUENO </td>
      @endif
      @if ($ENTRADA[3] >= 0 and $ENTRADA[3] < 5 )
      <td style="background-color:#8A1010"> REGULAR </td>
      @endif

    </tr>
  </tbody>
</table>
</body>
</html>
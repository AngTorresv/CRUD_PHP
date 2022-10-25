from conexion import con 
cursor = con.cursor()
#Eliminacion

while True:
   eli = input("\nDeceas eliminar registros s/n: ")
   if eli.lower() == "s":
    idL = input("Ingresa id del registro: ")
    verificacion = ("SELECT id FROM salarioM WHERE id= ?;")
    cursor.execute(verificacion, (idL))
    resultado = cursor.fetchone()
    print(resultado)
    if resultado:
      consulta= "DELETE FROM salarioM WHERE id= ?;"
      cursor.execute(consulta, (idL))
      con.commit()
      print("registro eliminado")
    else:

      print("id incorrecto")

   else:
      print("salio de la actualizacion")
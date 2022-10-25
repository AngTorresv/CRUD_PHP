from conexion import con 
cursor = con.cursor()
#cursor.execute("SELECT @@version;")
#row = cursor.fetchone()
#cursor.execute("SELECT * FROM salarioM;")
#rows = cursor.fetchall()
#for row in rows:
 #       print(row)
Act = input("\nDeceas actualizar los registros s/n: ")
if Act.lower() == "s":
   idL = input("Ingresa id del registro: ")
   verificacion = ("SELECT id FROM salarioM WHERE id= ?;")
   cursor.execute(verificacion, (idL))
   resultado = cursor.fetchone()
   print(resultado)
   if resultado:
      F1 = input("Ingrese nuevos datos : ")
      F2 = input("Ingrese nuevos datos: ")
      F3 = input("Ingrese nuevos datos: ")
      F4 = input("Ingrese nuevos datos: ")
      F5 = input("Ingrese nuevos datos: ")
      Fecha = input("Ingrese nuevos datos: ")
      consultaUd = "UPDATE salarioM set F1=?,F2=?,F3=?,F4=?,F5=?,Fecha=? WHERE id=?"
      cursor.execute(consultaUd, (F1,F2,F3,F4,F5,Fecha,idL))
      con.commit()
      print("registro actualizado")
   else:
      print("id incorrecto")
else:
   print("salio de la actualizacion")




/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package inventario;

/**
 *
 * @author jonat
 */
import java.sql.*;
import java.util.logging.Level;
import java.util.logging.Logger;
public class INVENTARIO {

    /**
     * @param args the command line arguments
     */
    
    public static void main(String[] args) {
        
        String usuario = "root";
        String password = "Ssbc0506*";
        String url = "jdbc:mysql://localhost:3306/sup_inventarios";
        Connection conexion;
        Statement statement;
        ResultSet rs;
        
        try {
            Class.forName("com.mysql.jdbc.Driver");
            
            // TODO code application logic here
        } catch (ClassNotFoundException ex) {
            Logger.getLogger(INVENTARIO.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        try {
            conexion = DriverManager.getConnection(url,usuario,password);
            statement = conexion.createStatement ();
            statement.executeUpdate("INSERT INTO PROVEEDORES(NOMBRE,IDENTIFICACION,PRODUCTO,CONTACTO,NUMERO_CONTRATO,CANTIDAD_PEDIDOS) VALUES('Jonathan Viracacha','335314176','Snacks','325-0259','6953219993,83334','6357')");
            rs = statement.executeQuery("SELECT * FROM proveedores");
            rs.next();
            do {
              System.out.println(rs.getInt("ID_proveedor")+" : "+rs.getString("Nombre")+" : "+rs.getInt("Identificacion")+" : "+rs.getString("Producto")+" : "+rs.getString("Contacto")+" : "+rs.getString("Numero_contrato")+" : "+rs.getString("Cantidad_pedidos"));
            }while(rs.next());
        } catch (SQLException ex) {
            Logger.getLogger(INVENTARIO.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        
    }
    
}

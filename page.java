import java.awt.*;
public class Testawt
{
    Testawt()
    {
        Frame fm=new Frame();
        Lable lb=new Lable("welcome to my world");
        fm.add(lb);
        fm.setSize(300,300);
        fm.setVisible(true);
    }

    public static void main(String[] args) {
            Testawt ta= new Testawt();     
    }
}
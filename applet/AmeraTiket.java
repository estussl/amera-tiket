import java.applet.*;
import java.awt.*;

public class AmeraTiket extends Applet
{
	public void paint(Graphics g)
	{
		Font font = new Font("Arial", Font.BOLD,50);
		Color judul = new Color(0,90,49);
		Color background = new Color(243,250,182);
		Graphics2D alias = (Graphics2D) g;

		g.setColor(background);
		g.fillRect(0,0,400,100);
		alias.setRenderingHint(
						RenderingHints.KEY_TEXT_ANTIALIASING,
						RenderingHints.VALUE_TEXT_ANTIALIAS_ON);

		g.setFont(font);
		g.setColor(judul);
		g.drawString("AMERA TIKET", 5, 45 );

	}
}

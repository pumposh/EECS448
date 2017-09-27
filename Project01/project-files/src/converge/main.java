package converge;
import java.io.IOException;
import java.util.Vector;
import java.util.Scanner;

/**
 * The main.java file will be used to run the Convergent App.
 * 
 * @author Menita Vedantam, Pumposh Bhat, Vivek Tallavajhala
 * @since 2017-09-15
 */
public class Main {
	public static void main(String []args) throws IOException
	{
		Scanner myScan = new Scanner(System.in);
		String choice = "";
		boolean incorrectInput = true;
		boolean cont = true;
		int c = 0;
		while (cont)
		{
			while(incorrectInput) {
				clearPrint("What would you like to do?\n 1. Create an Event\n 2. Join an event\n 3. View an existing event\nPlease enter number corresponding to the option you choose.");
				choice = myScan.nextLine();
				if(isInteger(choice)) {
					c = Integer.valueOf(choice);
					if(c == 1 || c == 2 || c == 3) {
						incorrectInput = false;
					}
					else {
						System.out.println("Invalid input. Please enter option 1 or 2.");
					}
				}
				else {
					System.out.println("Invalid input. Please enter option 1 or 2.");
				}
			}
			
			if(c == 1) {
				AddEvent AdminEvent = new AddEvent();
				AdminEvent.start();
			}
			else if (c == 2) {
				JoinEvent.run();
			}
			else if (c == 3)
			{
				JoinEvent.view();
			}
			
			System.out.println("\nPress enter to return to main menu\nType 'quit' to exit:\n");
			String exit = myScan.nextLine();
			if (exit.equals("quit"))
			{
				cont = false;
			}
			c = 0;
			incorrectInput = true;
		}
		myScan.close();
	}
	
	/**
	 * Checks to see if the given value is an integer.
	 * @param s the string that will be checked to see if it is
	 * an integer.
	 * @return boolean that determines if the string is an integer.
	 */
	public static boolean isInteger(String s) {
	    try { 
	        Integer.parseInt(s); 
	    } 
	    catch(NumberFormatException e) { 
	        return false; 
	    } 
	    catch(NullPointerException e) {
	        return false;
	    }
	    return true;
	}
	
	/**
	 * Method that clearly prints whatever string is given to the method.
	 * 
	 * @param text that will be clearly printed.
	 */
	private static void clearPrint(String text)
	{
		clearScreen();
		System.out.println(text);
	}
	
	/**
	 * Method that will clear the screen of all output.
	 */
	private static void clearScreen()
	{
		for (int i = 0; i < 100; i++)
		{
			System.out.println("\n");
		}
	}
}

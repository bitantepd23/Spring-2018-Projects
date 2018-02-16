import java.lang.Process;
import java.lang.ProcessBuilder;
import java.util.Scanner;
import java.io.IOException;

public class Driver{

  public static void main(String[] args) throws IOException{

    // Prompts for user input of arguments if none were put in through the command-line.
    if (args.length == 0){
      Scanner scanObj = new Scanner(System.in);

      System.out.println("There are no args.");
      System.out.println("Please enter your argument. If there is more than one, separate them with a space. ");
      String userArgsString = scanObj.nextLine();
      scanObj.close();
      String[] userArgs = userArgsString.split(" ");

      // sets the command-line args to the user's input
      args = userArgs;
    }

    // Test to print out command-line args
    /*System.out.println("\nNumber of args: "+args.length);
    System.out.print("\nArg(s) is(are): ");
    for (int i=0; i<args.length; i++){
      if (i == 0){
        System.out.print(args[0]);
      }
      else {
      System.out.print(", "+args[i]);
      }

    } // End of command-line print test and prints a new line

    System.out.println();
    */

    // for loop that can take multiple inputs and perform the Collatz algorithm on
    // each argument as a separate process

    for (int i=0; i<args.length; i++){
      System.out.println("Argument passed: "+args[i]);
      ProcessBuilder pBuilder = new ProcessBuilder("java", "Collatz", args[i]).inheritIO();
      Process procObj = pBuilder.start();

      while (procObj.isAlive()){
        try {
          Thread.sleep(1);
        }
        catch (Exception e){ }

      }
    }


    // pBuilder.start();
    // processObj.getOutputStream();


    // collatz(args[0]);

  }


}

import java.util.Scanner;


public class Driver{

  public static void main(String[] args){

    // Prompts for user input of arguments if none were put in through the command-line.

    if (args.length < 1){
      String userArgsString = "";
      Scanner scanObj = new Scanner(System.in);

      System.out.println("There are no args.");
      System.out.println("Please enter your argument. If there is more than one, separate them with a space. ");

      /* convert these to take Integer values if no arguments
         are supplied */
      userArgsString = scanObj.nextLine();
      scanObj.close();

      args = userArgsString.split(" ");

    } // end if

  Integer[] intArgs = new Integer[args.length];

  /*
  // Debugging block for printing out all the arguments.
  System.out.println("Number of arguments: "+args.length);
  System.out.println("Argurments:");
  */

  for (int i=0; i<args.length; i++){
    intArgs[i] = Integer.parseInt(args[i]);
    // System.out.println("\t"+args[i]); // Debugging line for printing out all args
  } // end for


  // Average object and thread creation
  Average avgObj = new Average();
  Thread avgThrd = new Thread(new AverageCalculation(intArgs, avgObj));

  // Min object and thread creation
  Minimum minObj = new Minimum();
  Thread minThrd = new Thread(new MinCalculation(intArgs, minObj));

  // Max object and thread creation
  Maximum maxObj = new Maximum();
  Thread maxThrd = new Thread(new MaxCalculation(intArgs, maxObj));

  // Thread execution
  avgThrd.start();
  minThrd.start();
  maxThrd.start();
  try { // try block for joining and printing average, min, and max
    avgThrd.join();
    minThrd.join();
    maxThrd.join();

    System.out.println("The average is: "+avgObj.getAvg());
    System.out.println("The minimum is: "+minObj.getMin());
    System.out.println("The maximum is: "+maxObj.getMax());
  } // end try
  catch (InterruptedException ie){

  } // end catch

  } // end main
}



public class Collatz{

  public static void main(String[] args){

    System.out.print("\n\t"+args[0]);

    int argument = Integer.parseInt(args[0]);

    while (argument != 1){
      if (argument % 2 == 0){
        argument = argument / 2;
      }
      else if (argument % 2 == 1){
        argument = argument * 3 + 1;
      }
      System.out.print(", "+argument);
    }
    System.out.println("\n");
  }

}

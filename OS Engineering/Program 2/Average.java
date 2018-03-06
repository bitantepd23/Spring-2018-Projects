class Average {

  private Integer avg;

  public Integer getAvg(){
    return this.avg;
  }

  public void setAvg(Integer avg){
    this.avg = avg;
  }
}

class AverageCalculation implements Runnable{

  private Integer[] intArgs;
  private Average avgObj;

  public AverageCalculation(Integer[] intArgs, Average avgObj){
    this.intArgs = intArgs;
    this.avgObj = avgObj;
  }


  public void run(){

    Integer sum = 0;

    for (int i=0; i<intArgs.length; i++){
      // intArgs[i] = Integer.parseInt(arguments[i]);
      sum += intArgs[i];
    }

    Integer avg = sum / intArgs.length;
    // System.out.println("Sum | Average = "+sum+" / "+intArgs.length+" | "+avg); // prints the sum, the number of args, and the average

    avgObj.setAvg(avg);
  }
}

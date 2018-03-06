class Minimum {

  private Integer min;

  public Integer getMin(){
    return this.min;
  }

  public void setMin(Integer min){
    this.min = min;
  }
}

class MinCalculation implements Runnable {

  private Integer[] intArgs;
  private Minimum minObj;

  public MinCalculation(Integer[] intArgs, Minimum minObj){
    this.intArgs = intArgs;
    this.minObj = minObj;
  }

  public void run(){
    Integer min = 10000;

    for (int i=0; i<intArgs.length; i++){
      if (intArgs[i] < min){
        min = intArgs[i];
      }
    }
    minObj.setMin(min);
  }
}

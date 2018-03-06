class Maximum {

  private Integer max;

  public Integer getMax(){
    return this.max;
  }

  public void setMax(Integer max){
    this.max = max;
  }
}

class MaxCalculation implements Runnable {

  private Integer[] intArgs;
  private Maximum maxObj;

  public MaxCalculation(Integer[] intArgs, Maximum maxObj){
    this.intArgs = intArgs;
    this.maxObj = maxObj;
  }

  public void run(){
    Integer max = -10000;

    for (int i=0; i<intArgs.length; i++){
      if (intArgs[i] > max){
        max = intArgs[i];
      }
    }
    maxObj.setMax(max);
  }
}

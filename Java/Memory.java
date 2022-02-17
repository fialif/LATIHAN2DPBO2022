class Memory extends Hardware{
    private String frequency;
    private String memorySize;
    private String supportsCuda;

    Memory(){
    }

    Memory(String f, String m, String s){
        this.frequency = f;
        this.memorySize = m;
        this.supportsCuda = s;
    }

    void setFrequency(String f){
        this.frequency = f;
    }
    String getFrequency(){
        return this.frequency;
    }

    void setMemorySize(String m){
        this.memorySize = m;
    }
    String getMemorySize(){
        return this.memorySize;
    }

    void setSupportsCuda(String f){
        this.supportsCuda = f;
    }
    String getSupportsCuda(){
        return this.supportsCuda;
    }
}
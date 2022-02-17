class Hardware extends Product{
    private String brand;
    private String model;

    Hardware(){
    }

    Hardware(String b, String m){
        this.brand = b;
        this.model = m;
    }

    void setBrand(String m){
        this.brand = m;
    }
    String getBrand(){
        return this.brand;
    }

    void setModel(String m){
        this.model = m;
    }
    String getModel(){
        return this.model;
    }
}
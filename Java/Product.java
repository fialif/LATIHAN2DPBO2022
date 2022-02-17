class Product{
    private String idProduct;
    private int price;

    Product(){
    }

    Product(String id, int p){
        this.idProduct = id;
        this.price = p;
    }

    void setIDProduct(String id){
        this.idProduct = id;
    }

    String getIDProduct(){
        return this.idProduct;
    }

    void setPrice(int p){
        this.price = p;
    }

    int getPrice(){
        return this.price;
    }
}
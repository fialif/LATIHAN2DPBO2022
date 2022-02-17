class Product{
    private:
        string idProduct;
        int price;

    public:
        Product(){
        }

        Product(string id, int p){
            this->idProduct = id;
            this->price = p;
        }

        void setIDProduct(string id){
            this->idProduct = id;
        }
        string getIDProduct(){
            return this->idProduct;
        }

        void setPrice(int p){
            this->price = p;
        }
        int getPrice(){
            return this->price;
        }

        ~Product(){
        }
};
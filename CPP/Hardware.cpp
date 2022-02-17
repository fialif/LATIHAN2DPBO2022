#include <iostream>
#include <string>

class Hardware : public Product{
    private:
        string brand;
        string model;

    public:
        Hardware(){
        }

        Hardware(string b, string m){
            this->brand = b;
            this->model = m;
        }

        void setBrand(string b){
            this->brand = b;
        }
        string getBrand(){
            return this->brand;
        }

        void setModel(string m){
            this->model = m;
        }
        string getModel(){
            return this->model;
        }

        ~Hardware(){
        }
};
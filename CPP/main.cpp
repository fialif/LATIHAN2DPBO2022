#include <iostream>
#include <string>
using namespace std;
#include "Product.cpp"
#include "Hardware.cpp"
#include "Memory.cpp"

int main(){
    Memory ram("2.00 MHz", "4 GB", true);

    ram.setIDProduct("100511");
    ram.setPrice(200000);

    ram.setBrand("VGen");
    ram.setModel("DDR4");

    cout << "Spesifikasi Memory" << endl;
    cout << "ID : " << ram.getIDProduct() << endl;
    cout << "Price         : " << ram.getPrice() << endl;
    cout << "Brand         : " << ram.getBrand() << endl;
    cout << "Model         :	" << ram.getModel() << endl;
    cout << "Frequency     :	" << ram.getFrequency() << endl;    
    cout << "Memory Size   : " << ram.getMemorySize() << endl;
    if(ram.getSupportsCuda()){
        cout << "Supports Cuda : Yes" << endl;
    }

    return 0;
}
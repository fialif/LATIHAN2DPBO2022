#include <iostream>
#include <string>

class Memory : public Hardware{
    private:
        string frequency;
        string memorySize;
        bool supportsCuda;

    public:
        Memory(){
        }

        Memory(string f, string m, bool s){
            this->frequency = f;
            this->memorySize = m;
            this->supportsCuda = s;
        }

        void setFrequency(string f){
            this->frequency = f;
        }
        string getFrequency(){
            return this->frequency;
        }

        void setMemorySize(string m){
            this->memorySize = m;
        }
        string getMemorySize(){
            return this->memorySize;
        }

        void setSupportsCuda(bool f){
            this->supportsCuda = f;
        }
        bool getSupportsCuda(){
            return this->supportsCuda;
        }

        ~Memory(){
        }
};
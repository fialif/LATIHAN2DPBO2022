class Main{
    public static void main(String[] args){
        Memory ddrRam = new Memory("2.00 MHz", "4 GB", "Yes");

        ddrRam.setBrand("VGen");
        ddrRam.setModel("DDR4");
        ddrRam.setIDProduct("100511");
        ddrRam.setPrice(200000);

        System.out.println("Spesifikasi Memory");
        System.out.println("ID : " + ddrRam.getIDProduct());
        System.out.println("Price         : " + ddrRam.getPrice());
        System.out.println("Brand         : " + ddrRam.getBrand());
        System.out.println("Model         :	" + ddrRam.getModel());

        System.out.println("Frequency     :	" + ddrRam.getFrequency());
        System.out.println("Memory Size   : " + ddrRam.getMemorySize());
        System.out.println("Supports Cuda : " + ddrRam.getSupportsCuda());

        /*  Spesifikasi Memory
            ID : 100511
            Price         : 200000
            Brand         : V-Gen
            Model         :	RAM
            Frequency     :	3.00 MHz
            Memory Size   : 4 GB
            Supports Cuda : Yes */ 
    }
}
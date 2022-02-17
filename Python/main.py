from Memory import Memory

ram = Memory("100511", 200000, "VGen", "DDR4", "2.MHz", "4GB", True)

print("Spesifikasi Memory")
print("ID : ", ram.getIDProduct())
print("Price         : ", ram.getPrice())
print("Brand         : ", ram.getBrand())
print("Model         :	", ram.getModel())
print("Frequency     :	", ram.getFrequency())
print("Memory Size   : ", ram.getMemorySize)
print("Supports Cuda : ", ram.getSupportsCuda())

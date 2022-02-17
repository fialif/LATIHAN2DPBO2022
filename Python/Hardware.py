from Product import Product

class Hardware(Product):

    def __init__(self, id, p, b, m):
        super().__init__(id, p)
        self.brand = b
        self.model = m

    def setBrand(self, b):
        self.brand = b
    def getBrand(self):
        return self.brand

    def setModel(self, m):
        self.model = m
    def getModel(self):
        return self.model
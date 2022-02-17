from Hardware import Hardware

class Memory(Hardware):

    def __init__(self, id, p, b, m, f, ms, sc):
        super().__init__(id, p, b, m)
        self.frequency = f
        self.memorySize = ms
        self.supportsCuda = sc

    def setFrequency(self, f):
        self.frequency = f
    def getFrequency(self):
        return self.frequency

    def setMemorySize(self, ms):
        self.memorySize = ms
    def getMemorySize(self):
        return self.memorySize

    def setSupportsCuda(self, sc):
        self.supportsCuda = sc
    def getSupportsCuda(self):
        return self.supportsCuda

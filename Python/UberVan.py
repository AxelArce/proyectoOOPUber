from car import Car 

from uberadvanced import UberAdvanced

class UberVan (UberAdvanced):
    def __init__ (self, id, license, driver, passengers, typeCarAccepted, seatsMaterialal):
        super().__init__(id, license, driver, passengers, typeCarAccepted, seatsMaterialal)

    def setPassengers (self, passengers):
        if (passengers >= 6):
            self._passengers = passengers
        else:
            print("Debe haber 6 o más pasajeros")
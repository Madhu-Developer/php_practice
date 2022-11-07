from gpiozero import LED
from time import sleep

led1 = LED(17)
led2 = LED(27)

while True:
    led1.on()
    print("led1 is on ")
    sleep(1)
    led1.off()
    print("led1 is off ")
    sleep(1)
    led2.on()
    print("led2 is on ")
    sleep(1)
    led2.off()
    print("led2 is off ")
    sleep(1)

import RPi.GPIO as GPIO
from time import sleep
red = 19 
blue = 12 
green = 18
GPIO.setmode(GPIO.BCM)
GPIO.setup(red, GPIO.OUT)
GPIO.setmode(GPIO.BCM)
GPIO.setup(blue, GPIO.OUT)
GPIO.setmode(GPIO.BCM)
GPIO.setup(green, GPIO.OUT)

m = GPIO.PWM(red , 100)
m.start(100)

p = GPIO.PWM(blue , 100)
p.start(100)

n = GPIO.PWM(green , 100)
n.start(100)

i = None 
r= 0 
b=0
g=0 

try:                                   
    while i != 'q':
        try:
            
            for r in range(1, 255,5):
                print(r,b,g)
                m.ChangeDutyCycle(int(r))
                sleep(1)
            
            for b in range(1, 255,5):
                p.ChangeDutyCycle(int(b))
                sleep(1)
            
            for x in range(1, 255,5):
                n.ChangeDutyCycle(int(g))
                sleep(1) 
   

        except Exception as e:
            
            pass 
        

except Exception as e:
    print("passed error -> 1st step")
    pass


m.stop()
p.stop()
n.stop()
GPIO.cleanup()
print(' i am exiting the code ')

#09311600300


 
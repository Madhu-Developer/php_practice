import RPi.GPIO as GPIO
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

try:                                   
    while i != 'q':
        try:
            r=input("enter the value for red  = ")
            if (r == 'q'):
                break
            m.ChangeDutyCycle(int(r))
            b=input("enter the value for blue = ")
            if (b == 'q'):
                break
            p.ChangeDutyCycle(int(b))
            g=input("enter the value for green = ")
            if (g == 'q'):
                break
            n.ChangeDutyCycle(int(g)) 
   

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


 
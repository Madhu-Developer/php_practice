import RPi.GPIO as GPIO
channel = 19 
GPIO.setmode(GPIO.BCM)
GPIO.setup(channel, GPIO.OUT)

m = GPIO.PWM(channel, 100)
m.start(100)

i = None 
try:                                   
    while i != 'q':
        try:
            r=input("enter the brightness rate  = ")
            if (r == 'q'):
                break
            m.ChangeDutyCycle(int(r))
        except Exception as e:
            
            pass 
        
except Exception as e:
    print("passed error -> 1st step")
    pass

m.stop()
GPIO.cleanup()
print(' i am exiting the code ')
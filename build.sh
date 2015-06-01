mkdir build
cd build
gcc `php-config --includes` -fpic -c ../wiringpi_wrap.c ../WiringPi/wiringPi/wiringPi.c ../WiringPi/wiringPi/wiringShift.c ../WiringPi/wiringPi/wiringSerial.c ../WiringPi/wiringPi/piHiPri.c ../WiringPi/wiringPi/softPwm.c ../WiringPi/wiringPi/softTone.c ../WiringPi/wiringPi/wiringPiSPI.c
gcc -shared wiringpi_wrap.o wiringPi.o wiringSerial.o piHiPri.o wiringShift.o softPwm.o softTone.o wiringPiSPI.o -o wiringpi.so

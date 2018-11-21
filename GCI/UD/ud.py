from str import *
from array import *

tagged = open("tagged.txt","rt")
text = tagged.read()

start = array.array('i',(0 for i in range(0,strlen(text))))
end = array.array('i',(0 for i in range(0,strlen(text))))

began=False
aux=0
index=0

while aux<strlen(text):
	if text.find("^",aux)!=-1 and began==False:
		start[index]=text.find("^",aux)
		aux=(text.find("^",aux))+1
		began=True
	elif text.find("$",aux)!=-1 and began==True:
		end[index]=text.find("$",aux)
		aux=(text.find("^",aux))+1
		index+=1
		began=False
	else:
		MAX_INDEX = index
		tagged.close()

# Main loop
index=0
while index<=MAX_INDEX:
	#SEARCH FOR WORD (FROM '^' TO '<')

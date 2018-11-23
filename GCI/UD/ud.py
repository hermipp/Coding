from str import *
from array import *

tagged = open("tagged.txt","rt")
text = tagged.read()

start = array.array('i',(0 for i in range(0,strlen(text))))
end = array.array('i',(0 for i in range(0,strlen(text))))

began=False
aux=0
index=0

while aux<len(text):
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

words = [dict() for i in range(MAX_INDEX+1)]
curr_cat = 0
cat = "c"

# Main loop
index=0
while index<=MAX_INDEX:
	curr_word_index=start[index]
	curr_word_end=end[index]
	words[index].update({'w':""})

	if index>0:
		cat="c"
		curr_cat=0

	# GET WORD (FROM '^' TO '<')
	while curr_word_index<curr_word_end:
		if text.find("<",curr_word_index)==-1:
			words[index]['w'].append(text[curr_word_index])
			curr_word_index+=1
		else:
			break
	while curr_word_index<curr_word_end:
		curr_cat+=1
		cat.append(str(curr_cat))
		words[index].update({cat:""})

		if index>0 and curr_word_end<=curr_word_index:
			curr_word_index+=1

		while curr_word_index<curr_word_end and text.find(">",curr_word_index)==-1:
			words[index][str(cat)].append(text[curr_word_index])
			curr_word_index+=1
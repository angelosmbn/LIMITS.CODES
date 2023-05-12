word=input("Enter a String: ")
word = word.replace(" ", "")
occurrence = []
num = []
for x in word:
    occurrence.append(x)

new_occur = list(set(occurrence))
new_occur = sorted(new_occur)

for key in new_occur:
    num.append(word.count(key))

for x in new_occur:
    print(x, end=" ")

print()

for x in num:
    print(x, end=" ")

#Ian Angelo M. Simbulan
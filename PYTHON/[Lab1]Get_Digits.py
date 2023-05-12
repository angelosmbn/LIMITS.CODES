#Hi
#hi again
word = input("Enter a String: ")
for x in word:
    if x.isdigit():
        print(x, end = " ")
'''
word = input("Enter a String: ")
print(*[x for x in word if x.isdigit()], sep=" ")
'''
#Ian Angelo M. Simbulan
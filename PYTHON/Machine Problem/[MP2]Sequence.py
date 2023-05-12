import os

os.system("cls")
num = list(map(int, input("Enter elements: ").split()))
m = int(input("Differs by: "))
current = 0
longest = 0
i = 1

for i in range(len(num)):
    if (num[i]-num[i-1]) == m:
        current +=1
        if current > longest:
            longest = current
    else:
        current = 0
print(longest + 1)

#SIMBULAN



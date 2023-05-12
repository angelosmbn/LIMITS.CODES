nums = list(map(int, input("Input a list of integers separated by spaces: ").split()))

increasing = True
for i in range(len(nums) - 1):
    if nums[i] >= nums [i + 1]:
        increasing = False
        break

if increasing:
    print(f"{nums} is in increasing sequence")
else:
     print(f"{nums} is NOT in increasing sequence")

#SIMBULAN


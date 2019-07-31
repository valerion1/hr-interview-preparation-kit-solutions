
// slow
func minimumSwaps(arr []int) int {
	firstSwaperIndex := -1
	secondSwaperIndex := -1
	swapCounter := 0

	for i := 0; i < len(arr); i++ {
 		if(arr[i] - 1 == i) {
			continue
		} else {
			firstSwaperIndex = i
		}

		for j := i + 1; j < len(arr); j++ {
			if(arr[j] - 1 == j) {
				continue
			} else if(secondSwaperIndex == -1) {
				secondSwaperIndex = j
			} else if(arr[firstSwaperIndex] + arr[j] < arr[firstSwaperIndex] + arr[secondSwaperIndex]) {
				secondSwaperIndex = j
			}
		}
  
		arr[firstSwaperIndex], arr[secondSwaperIndex] = arr[secondSwaperIndex], arr[firstSwaperIndex]
		swapCounter++
  
 		secondSwaperIndex = -1
	}

	return swapCounter
}

// faster
func minimumSwaps(arr []int32) int32 {
	swapCounter := int32(0)
	tempArray := make(map[int32]int32)

	for i, v := range arr {
		tempArray[v] = int32(i)
	}

	for i := int32(0); i < int32(len(arr)); i++ {
		if(arr[i] != i + 1) {
			temp := arr[i]
			arr[i] = i + 1
			arr[tempArray[i + 1]] = temp
			tempArray[temp] = tempArray[i+1]

			swapCounter++
		}
	}

	return swapCounter
}
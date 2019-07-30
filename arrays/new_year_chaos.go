

func minimumBribes(q []int) {
    bribers := make(map[int]int)
    brideCounter := 0
    needSwap := true

    for needSwap {
        needSwap = false
        for i := 0; i < len(q); i++ {
            j := i + 1
            if(q[i] - 1 == i) {
                continue
            }

            if(q[i] > q[j]) {
                needSwap = true
                bribers[q[i]]++
                brideCounter++

                if(bribers[q[i]] > 2) {
                    fmt.Println("Too chaotic")
                    return
                }
                
                q[i], q[j] = q[j], q[i]
            }
        }
    }

    fmt.Println(brideCounter)
}